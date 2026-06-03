let a = "export variable";

function add() {
  console.log("export function");
}

class Customer {
  constructor() {
    console.log("export function");
  }
}

export { a, add, Customer };
