function payment(status) {
  return new Promise((resolve, reject) => {
    if (status) {
      resolve("success");
    } else {
      reject("fail");
    }
  });
}

async function orderDelivery(status) {
  try {
    let payment1 = await payment(status);
    console.log(payment1);
  } catch (error) {
    console.log(error);
  }
}

orderDelivery(0);
