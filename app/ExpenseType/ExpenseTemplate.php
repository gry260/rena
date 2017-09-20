<div #c></div>

<h2>Expense</h2>
<div></div>

<form [formGroup]="ExpenseForm" #Expenseform="ngForm"
      (ngSubmit)="onSubmit(category, subcategory_obj, name, price, date, comment, id)">
  <select formControlName="category_obj"  #category (change)="onChange(category.value, category)">
    <option *ngFor="let ii of ListCategories; let i = index" [value]="ii.id" [ngClass]="ii.t" [ngValue]="ii.id">
      {{ii.name}} {{ii.id}}
    </option>
  </select>
  <select name="subcategory_id" formControlName="subcategory" #subcategory_obj>
    <option *ngFor="let item of ListSubCategories; let i = index" [ngValue]="item" [ngClass]="item.t" [value]="item.id">
      {{item.name}}
    </option>
  </select>
  <input type="hidden" formControlName="id" placeholder="name" #id>
  <input type="text" formControlName="name" placeholder="name" (keyup)="OnNameChange(name.value)" #name>
  <input type="text" formControlName="price" placeholder="price" #price>
  <input type="text" formControlName="date" placeholder="date" #date>
  <input type="text" formControlName="comment" placeholder="comment" #comment>
  <button type="submit">Submit</button>
</form>

<ol>
  <li *ngFor="let item of ExpensesArray; ">
    {{ item.category_name }}&nbsp; &nbsp;&nbsp;
    {{ item.subcategory_name }}&nbsp; &nbsp;&nbsp;
    {{ item.user_id }}&nbsp; &nbsp;&nbsp;
    {{ item.name }}&nbsp; &nbsp;&nbsp;
    {{ item.price }}&nbsp; &nbsp;&nbsp;
    {{ item.date }}&nbsp; &nbsp;&nbsp;
    {{ item.comment }}&nbsp; &nbsp;&nbsp;
    {{item.id}}
    <input type="button" name="update" value="update" (click)="searchExpenseById(item.id)"/>
    <button (click)="onDelete(item.id)">Delete</button>
  </li>
</ol>


<div>
  <h2>Hello</h2>
  This demonstrate ng-include equivalent of Angular2
  <button (click)="add1()">Add 1</button>
  <button (click)="add2()">Add 2</button>
</div>

