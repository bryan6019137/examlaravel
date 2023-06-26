<div class="container-fluid">
    <form method="POST" action="{{ route('task.create') }}">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="titel" class="form-control" placeholder="Titel">
            </div>
            <div class="col">
                <input type="text" name="beschrijving" class="form-control" placeholder="Beschrijving">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Voeg taak toe</button>
    </form>
    <hr>
    <table class="table table-hover">
        <thead class="table-primary">
        <tr>php
            <th>Titel</th>
            <th>Beschrijving</th>
        </tr>
        </thead>
    </table>
</div>
