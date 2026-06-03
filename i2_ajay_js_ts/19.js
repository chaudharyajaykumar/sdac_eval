class InvalidOrderException extends Error {
  constructor(message) {
    super(message);
    this.name = "InvalidOrderException";
  }

  order(status) {
    try {
      if (status) {
        console.log("odered");
      } else {
        throw new InvalidOrderException("cannot order now");
      }
    } catch (error) {
      console.log(error);
    }
  }
}

let ex = new InvalidOrderException();
ex.order(1);
