import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { Bouton1Component } from './bouton1.component';

describe('Bouton1Component', () => {
  let component: Bouton1Component;
  let fixture: ComponentFixture<Bouton1Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ Bouton1Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(Bouton1Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
