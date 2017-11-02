import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
 shopping;
  title = 'App Ng2 : Records of Sport 2017/2018';

  ngOnInit() {
    this.shopping = true
  }

}
