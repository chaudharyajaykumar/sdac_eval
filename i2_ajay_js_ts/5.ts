interface Service {
  provideService(): boolean;
}

class DeliveryAgent2 implements Service {
  public provideService(): boolean {
    return true;
  }
}

let da2 = new DeliveryAgent2();
console.log(da2.provideService());
