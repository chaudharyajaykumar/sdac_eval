class Restaurant {
  constructor(
    public rname: string,
    public location: string,
    public rating: number,
  ) {}
}

let restaurant = new Restaurant("punjabi tadkha", "malad", 5);
console.log(restaurant);
