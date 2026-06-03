abstract class DeliveryStaff {
  abstract getSal(): number;
  abstract getRole(): string;
}

class DeliveryAgent extends DeliveryStaff {
  getSal(): number {
    return 200;
  }
  getRole(): string {
    return "deliveryaa agent";
  }
}

class Manger extends DeliveryStaff {
  getSal(): number {
    return 3000;
  }
  getRole(): string {
    return "manager";
  }
}

let da = new DeliveryAgent();
console.log(da.getRole());
console.log(da.getSal());

let m = new Manger();
console.log(m.getRole());
console.log(m.getSal());
