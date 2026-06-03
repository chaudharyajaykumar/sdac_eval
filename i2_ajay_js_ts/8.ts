class SupportExecutive {
  constructor(
    public name: string,
    public eid: number,
    public dept: string,
    public experience: number,
  ) {}

  public dispInfo(): void {
    console.log(this.name);
    console.log(this.eid);
    console.log(this.dept);
    console.log(this.experience);
  }
}

let se = new SupportExecutive("raju", 1, "service", 2);
se.dispInfo();
