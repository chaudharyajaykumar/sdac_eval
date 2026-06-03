function totalCost(...order) {
  return order.reduce((total, o) => (total += o), 0);
}
console.log(totalCost(10, 20, 30, 40));
