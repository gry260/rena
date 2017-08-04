<form [formGroup]="categorySubTypeForm" #eform="ngForm" (ngSubmit)="onSubmit(eform.value)" >
     <select name="category_id" formControlName="category_obj">
         <option *ngFor="let item of listCategories; let i = index" [ngValue]="item">
             {{item.name}}
         </option>
     </select>
    <input type="text" formControlName="name">
    <button type="submit">Submit</button>
</form>

