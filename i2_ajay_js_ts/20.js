function order(status) {
  let order = 10;
  try {
    if (status < order) {
      console.log("odered");
    } else {
      throw new Error("order exceed limit");
    }
  } catch (error) {
    console.log(error);
  }
}

order(5);
