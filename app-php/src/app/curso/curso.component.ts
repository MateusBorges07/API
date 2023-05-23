import { Component } from '@angular/core';

@Component({
  selector: 'app-curso',
  templateUrl: './curso.component.html',
  styleUrls: ['./curso.component.css']
})
export class CursoComponent{

  nome: string = "Ferrira";
  descricao: string = "Curso de AngularJS";
//construtor
constructor(){

}
//incializador
ngOnInit() {



}


}
