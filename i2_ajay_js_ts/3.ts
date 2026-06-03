class Order {
  constructor(
    public oid: number,
    public cname: string,
    public oAmount: number,
  ) {}
}

let order = new Order(1, "ajay", 200);
console.log(order);
