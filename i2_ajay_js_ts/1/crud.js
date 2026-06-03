const db = require("./db.js");

function addCustomer(id, name, address) {
  const data = [id, name, address];

  db.query(
    "insert into customer(id,name,address) values (?,?,?)",
    data,
    (err) => {
      if (err) {
        console.log(err);
      } else {
        console.log("inserted...");
      }
    },
  );
}

function updateCustomer(id, name) {
  const data = [name, id];

  db.query("update customer set name=? where id=?", data, (err) => {
    if (err) {
      console.log(err);
    } else {
      console.log("updated...");
    }
  });
}

function deleteCustomer(id) {
  const data = [id];

  db.query("delete from customer where id=?", data, (err) => {
    if (err) {
      console.log(err);
    } else {
      console.log("deleted...");
    }
  });
}

function showCustomer() {
  db.query("select * from customer", (err, result) => {
    if (err) {
      console.log(err);
    } else {
      console.log(result);
    }
  });
}

addCustomer(1, "ajay", "malad");
updateCustomer(1, "ram");
showCustomer();
deleteCustomer(1);
