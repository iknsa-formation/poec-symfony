import { Component, OnInit } from '@angular/core';
import { PlayersService } from 'app/services/players.service';
import { Player } from 'app/model/player.model';

@Component({
  selector: 'app-basket',
  templateUrl: './basket.component.html',
  styleUrls: ['./basket.component.css']
})
export class BasketComponent implements OnInit {
  myVar = true;
  players;
  goalPlus:boolean = true;
  goalLess:boolean = true;  constructor(
    public playerService:PlayersService
  ) { }

  ngOnInit() {
    this.players = this.playerService.getPlayers().then(data => this.players = data);
    console.log(this.players)
  }

}
