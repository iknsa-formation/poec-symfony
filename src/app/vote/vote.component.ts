import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-vote',
  templateUrl: './vote.component.html',
  styleUrls: ['./vote.component.css']
})
export class VoteComponent implements OnInit {
    listeLiens:Array<any>;
  constructor() {
  this.listeLiens = [];
  }
ajoutLien(lien,titre){
    let unLien = lien;
    let unTitre = titre;
    this.listeLiens.push({"lien":lien,"titre":titre,"vote":0});
}
    ajoutVoix(unIndice){
        this.listeLiens[unIndice].vote++;
    }
    supprimerVoix(unIndice){
        this.listeLiens[unIndice].vote--;
    }
  ngOnInit() {
  }

}
