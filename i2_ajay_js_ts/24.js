let data = [
  { item: "chicken", cost: 200, delivery: 20 },
  { item: "triple rice", cost: 170, delivery: 10 },
  { item: "sandwich", cost: 50, delivery: 15 },
];

console.log(data.map((order) => (order.cost += order.delivery)));
console.log(data.filter((order) => order.cost > 100));
console.log(data.reduce((total, order) => (total += order.cost),0));
