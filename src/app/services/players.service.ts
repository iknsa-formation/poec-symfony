import { Injectable } from '@angular/core';
import {Player} from '../model/player.model';
import { PlayerOfBasket, PlayerOfTennis, playerOfFootball } from '../mock/mock-players'

@Injectable()
export class PlayersService {

  constructor() { }

  getFootballers(): Promise<Array<Player>> {
    return Promise.resolve(playerOfFootball);
  }

  getFootballer(name:string) {
    return playerOfFootball.find(x => name === x.name )
  }

  getBasketers(): Promise<Array<Player>> {
    return Promise.resolve(PlayerOfBasket);
  }
  getBasketer(name:string){
    return PlayerOfBasket.find(x => name === x.name)
  }

  getTennismans(): Promise<Array<Player>> {
    return Promise.resolve(PlayerOfTennis);
  }

  getTennisman(name:string){
    return PlayerOfTennis.find(x => name === x.name)
  }

}
