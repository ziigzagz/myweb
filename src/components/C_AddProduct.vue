<template>
  <div class="container">
    <div class="row">
      <div class="col-6 mx-auto">
        <div class="card">
          <div class="card-header">เพิ่มสินค้า</div>
          <div class="card-body">
            <div class="col">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default"
                    >หมายเลขสินค้า</span
                  >
                </div>

                <input
                  name="serial"
                  type="text"
                  id="serial"
                  class="form-control"
                  aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-default"
                />
              </div>
            </div>
            <div class="col">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default"
                    >ชื่อสินค้า</span
                  >
                </div>
                <input
                  name="name"
                  type="text"
                  id="name"
                  class="form-control"
                  aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-default"
                />
              </div>
            </div>
            <div class="col">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default"
                    >ราคา</span
                  >
                </div>
                <input
                  name="price"
                  type="number"
                  id="price"
                  min="10"
                  class="form-control"
                  aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-default"
                />
              </div>
            </div>
            <div class="col">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default"
                    >รายละเอียด</span
                  >
                </div>
                <textarea name="info" id="info" cols="100%" rows="10"></textarea>
              </div>
            </div>
            <div class="col">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default"
                    >รูปภาพ</span
                  >
                </div>
                <input
                  type="file"
                  id="files"
                  name="files[]"
                  multiple
                  accept="image/*"
                />
              </div>
            </div>
            <button class="btn btn-danger mr-3" @click="cancel">
              ยกเลิก
            </button>
            <button class="btn btn-success" @click="AddProduct">
              เพิ่มสินค้า
            </button>
            <div class="mainDiv" align="right"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import firebase from "firebase";
export default {
  data() {
    return {
      serial: "",
      datas: [],
    };
  },
  methods: {
    async AddProduct() {
      if (
        document.getElementById("serial").value != "" &&
        document.getElementById("name").value != "" &&
        document.getElementById("price").value != ""

      ) {
        var storageRef = firebase.storage().ref("img");
        // Get the file from DOM

        var file = document.getElementById("files").files[0];
        console.log(file);
        //dynamically set reference to the file name

        var thisRef = storageRef.child(file.name);
        //put request upload file to firebase storage
        thisRef.put(file).then(() => {
          alert("เพิมสินค้าสำเร็จ");
          console.log("Uploaded a blob or file!");
          const storage = firebase.storage();
          // let linkimg = "";
          // Get metadata properties
          let linkimg;
          let self = this;
          storage
            .ref("img")
            .child(file.name)
            .getDownloadURL()
            .then((url) => {
              // console.log(typeof url);
              // console.log(url);
              self.linkimg = url;

              self.datas.push(url);
              console.log(linkimg);
              console.log(self.linkimg);
              console.log(self.datas);
              // console.log(datas);
              var data = new FormData();
              data.append(
                "serial",
                document.querySelector("input[name=serial]").value
              );
              data.append(
                "name",
                document.querySelector("input[name=name]").value
              );
              data.append(
                "price",
                document.querySelector("input[name=price]").value
              );
              data.append(
                "info",
                document.querySelector("textarea[name=info]").value
              );
              data.append("img", self.datas[0]);
              data.append("del", 0);
              console.log(data);
              axios
                .post("http://localhost:80/insert.php", data)
                .then((response) => {
                  console.log(response.data);
                  this.$router.replace("/Manage");
                });
            });
        });
      }
      else{
        alert("กรุณากรอกข้อมูลให้ครบ");
      }
    },
    cancel() {
      this.$router.replace("/Manage");
    },
    onAdd() {
      // console.log(this.$refs.myTestField.value);
      // Created a Storage Reference with root dir
      var storageRef = firebase.storage().ref("img");
      // Get the file from DOM
      var file = document.getElementById("files").files[0];
      console.log(file);
      //
      //dynamically set reference to the file name
      var thisRef = storageRef.child(file.name);

      //put request upload file to firebase storage
      thisRef.put(file).then((snapshot) => {
        alert("เพิมสินค้าสำเร็จ");
        console.log("Uploaded a blob or file!");
      });
    },
  },
};
</script>

<style></style>
