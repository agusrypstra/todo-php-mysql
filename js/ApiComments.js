const API_URL = "https://localhost/web2/todolist-practice-1/api/comments";
let app = new Vue({
  el: "#app",
  data: {
    title: "Task list",
    comments: [],
  },
});
export default class ApiComments {
  async getComments(id) {
    try {
      let res = await fetch(API_URL + "/" + id);
      if (res.status == 200) {
        const data = await res.json();
        app.comments = data;
      }
      if (res.status == 204) {
        console.log("No hay comentarios");
      }
    } catch (error) {
      console.log(error.message);
    }
  }
  async addComment(comment, task_id) {
    try {
      const res = await fetch(API_URL, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(comment),
      });
      if (res.ok) {
        const data = await res.json();
        await this.getComments(task_id);
      } else {
        console.log("Error rotundo negrito");
      }
    } catch (e) {
      console.log(e.message);
    }
  }
  async deleteComment(comment_id, task_id) {
    try {
      if (app.comments.length == 1) {
        await fetch(API_URL + "/" + comment_id, {
          method: "DELETE",
          headers: {
            "Content-type": "application/json",
          },
        });
        app.comments = [];
      } else {
        const res = await fetch(API_URL + "/" + comment_id, {
          method: "DELETE",
          headers: {
            "Content-type": "application/json",
          },
        });
        if (res.ok) {
          this.getComments(task_id);
        }
      }
    } catch (error) {
      console.log(e);
    }
  }
  async orderComments(id, orderBy) {
    try {
      if (
        orderBy === "newest" ||
        orderBy === "oldest" ||
        orderBy === "less-valued" ||
        orderBy === "most-valued"
      ) {
        console.log("object");
        const res = await fetch(API_URL + "/" + id + "?order=" + orderBy);
        if (res.status == 200) {
          const data = await res.json();
          app.comments = data;
        }
      }
    } catch (e) {
      console.log(e.message);
    }
  }
}
