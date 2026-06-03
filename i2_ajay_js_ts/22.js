let increareOrderAmount = function (order, amount) {
  return order.map((order) => order + amount);
};

console.log(increareOrderAmount([10, 20, 14, 50, 30], 2));

