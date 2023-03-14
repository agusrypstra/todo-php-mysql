<?php
require_once("Model/CommentModel.php");
require_once('./View/ApiView.php');
require_once('./helpers/AuthHelper.php');

class ApiCommentController
{
    private $model;
    private $view;
    private $data;
    private $authHelper;
    public $comments;
    function __construct()
    {
        $this->model = new CommentModel();
        $this->view = new ApiView();
        $this->authHelper = new AuthHelper();
        $this->data = file_get_contents('php://input');
    }
    function getData()
    {
        return json_decode($this->data);
    }
    function getAllComments()
    {
        try {
            $this->comments = $this->model->getAllComments();
            if (count($this->comments) > 0) {
                return $this->view->response($this->comments, 200);
            } else {
                return $this->view->response("No comments found", 204);
            }
        } catch (Exception $e) {
            return $this->view->response("Error" . $e->getMessage(), 400);
        }
    }
    function getCommentsByTaskId($params = [])
    {
        try {
            $id = $params[':ID'];
            if (isset($_GET['order']) && !empty($_GET['order']) && isset($id) && !empty($id)) {
                $this->comments = $this->model->getOrderComents($id, $_GET['order']);
                if (count($this->comments)) {
                    return $this->view->response($this->comments, 200);
                } else {
                    return $this->view->response("This task haven't comments", 204);
                }
            }

            if (!isset($_GET['order']) && isset($id) && !empty($id)) {
                $this->comments = $this->model->getCommentsById($id);
                if (count($this->comments) == 0) {
                    return $this->view->response("This task haven't comments", 204);
                } else {
                    return $this->view->response($this->comments, 200);
                }
            }

        } catch (Exception $e) {
            return $this->view->response("Error" . $e->getMessage(), 400);
        }
    }
    function addComment()
    {
        try {
            $data = $this->getData();
            $userId = $this->authHelper->getUserId();
            if (!empty($data->comment) && !empty($data->value) && !empty($data->task_id) && !empty($userId)) {
                $lastId = $this->model->addComment($data->comment, $data->value, $data->task_id, $userId);
            }
            if (is_null($userId)) {
                return $this->view->response("Unauthorized", 401);
            }
            if (!empty($lastId)) {
                return $this->view->response($data, 201);
            } else {
                return $this->view->response($data, 400);
            }
        } catch (Exception $e) {
            return $this->view->response("Error" . $e->getMessage(), 400);
        }
    }
    function deleteCommentById($params = [])
    {
        try {
            $id = $params[':ID'];
            if (is_numeric($id)) {
                $this->model->deleteCommentById($id);
                return $this->view->response("Deleted", 200);
            } else {
                return $this->view->response("Bad request", 400);
            }
        } catch (Exception $e) {
            return $this->view->response("Error" . $e->getMessage(), 400);
        }
    }
}