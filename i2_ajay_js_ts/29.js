function deliverycharge(order, deliverycharge = 5) {
  return deliverycharge + order.reduce((total, o) => (total += o), 0);
}
console.log(deliverycharge([10, 20, 30, 40]));
