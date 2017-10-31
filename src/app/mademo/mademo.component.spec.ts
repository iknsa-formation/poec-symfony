import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MademoComponent } from './mademo.component';

describe('MademoComponent', () => {
  let component: MademoComponent;
  let fixture: ComponentFixture<MademoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MademoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MademoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
