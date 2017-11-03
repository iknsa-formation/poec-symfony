import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-user',
  templateUrl: './user.component.html',
  styleUrls: ['./user.component.css']
})
export class UserComponent implements OnInit {

Private user: User[];

  constructorprivate us: UserService { }

  ngOnInit() {
  
  this.user = this.us.getUser();
  }

}
