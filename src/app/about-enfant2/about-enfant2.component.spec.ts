import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AboutEnfant2Component } from './about-enfant2.component';

describe('AboutEnfant2Component', () => {
  let component: AboutEnfant2Component;
  let fixture: ComponentFixture<AboutEnfant2Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AboutEnfant2Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AboutEnfant2Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
