import ApiComments from "./ApiComments.js";
const apiComments = new ApiComments();

const formComment = document.querySelector("#formComment");

const task_id = formComment.dataset.id;

formComment.addEventListener("submit", async (e) => {
  e.preventDefault();
  const data = new FormData(formComment);

  const newComment = {
    comment: data.get("comment"),
    value: data.get("value"),
    task_id,
  };
  try {
    apiComments.addComment(newComment, task_id);
    setTimeout(() => {
      deleteComments();
    }, 100);
  } catch (error) {
    console.log(error);
  }
  formComment.reset();
});
const deleteComments = async () => {
  let btnDelete = document.querySelectorAll(".btn-danger");
  for (const btn of btnDelete) {
    btn.addEventListener("click", (e) => {
      apiComments.deleteComment(e.target.dataset.id, task_id);
    });
  }
};
const filterValue = document.getElementById("filterValue");

filterValue.addEventListener("change", (e) => {
  apiComments.orderComments(task_id, e.target.value);
  setTimeout(() => {
    deleteComments();
  }, 100);
});
const getComments = () => {
  apiComments.getComments(task_id);
  setTimeout(() => {
    deleteComments();
  }, 100);
};
getComments();
