function orderDelivery(status) {
  return new Promise((resolve, reject) => {
    if (status) {
      resolve("odered");
    } else {
      reject("not odered");
    }
  });
}

orderDelivery(1)
  .then((result) => {
    console.log(result);
  })
  .catch((err) => {
    console.log(err);
  });
