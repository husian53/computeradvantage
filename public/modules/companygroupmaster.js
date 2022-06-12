import * as operations from './lib.js';

const operation = new operations.CRUD;

operation.onLoad();

$('#add').click( (e) => {
    e.preventDefault();
    operation.add();
});

$('#showForm').click( () => {operation.showForm();});

