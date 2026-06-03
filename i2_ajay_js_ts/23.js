function filterHighValueOrder(order, amount) {
  return order.filter((order) => order.cost > amount);
}
console.log(
  filterHighValueOrder(
    [
      { item: "chicken", cost: 200 },
      { item: "triple rice", cost: 170 },
      { item: "sandwich", cost: 50 },
    ],
    100,
  ),
);
