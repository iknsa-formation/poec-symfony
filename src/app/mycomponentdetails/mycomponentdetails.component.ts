import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { PlayersService } from 'app/services/players.service';


@Component({
  selector: 'app-mycomponentdetails',
  templateUrl: './mycomponentdetails.component.html',
  styleUrls: ['./mycomponentdetails.component.css']
})
export class MycomponentdetailsComponent implements OnInit {
name;
x;
  constructor(
    public activate: ActivatedRoute,
    public playerService: PlayersService
  ) { }

  ngOnInit() {
   this.activate.params.subscribe(data => {
     this.name = data["id"];
      this.x = 
       this.playerService.getBasketer(this.name) ||
       this.playerService.getTennisman(this.name) ||
       this.playerService.getFootballer(this.name);
    })
  }
}
// ShowPlayer(id:string, x){
//   switch (id){
//     case 'basket':
//     x = this.playerService.getBasketer(id);
//     break;
//     case 'tennis':
//     x = this.playerService.getTennisman(id);
//     break;
//     case 'foot':
//     x = this.playerService.getFootballer(id);
//     break;
//   }
