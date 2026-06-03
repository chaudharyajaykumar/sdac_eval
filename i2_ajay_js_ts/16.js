function deliveyAddress(status) {
  try {
    if (status) {
      console.log("delivery address");
    } else {
      throw new Error("delivery address missing");
    }
  } catch (error) {
    console.log(error);
  }
}

deliveyAddress(1);
