function resturant(status) {
  if (status) {
    console.log("resturant exist");
  } else {
    throw new Error("resturant does not exist");
  }
}

function order(status) {
  deliveyAddress(1);
  try {
    let resturant = restaurant(status);
    console.log(resturant);
  } catch (error) {
    console.log(error);
  } finally {
    console.log("order log updated");
  }
}

order(1);
