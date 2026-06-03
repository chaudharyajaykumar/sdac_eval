function findMostFrequentCustomer(order) {
  let orderfiltered = order.sort((a, b) => a.count - b.count);
  return orderfiltered.pop();
}

console.log(
  findMostFrequentCustomer([
    { customer: "customer1 ", count: 10 },
    { customer: "customer2 ", count: 5 },
    { customer: "customer3 ", count: 5 },
  ]),
);
