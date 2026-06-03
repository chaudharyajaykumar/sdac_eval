let calcuateBill = (order) => {
  return order.reduce((total, order) => (total += order.cost), 0);
};

console.log(
  calcuateBill([
    { item: "chicken", cost: 200 },
    { item: "triple rice", cost: 170 },
    { item: "sandwich", cost: 50 },
  ]),
);
