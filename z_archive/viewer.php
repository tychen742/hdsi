<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">X</button>
    <h1>Lab 6</h1>
</div>
<div class="modal-body">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            Employee Information
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="text-right col-xs-2">Title:</div>
                <div class="text-left col-xs-3" id="title"></div>
                <div class="text-right col-xs-2">First:</div>
                <div class="text-left col-xs-3" id="firstname"></div>
            </div>
            <div class="row">
                <div class="text-right col-xs-2">Phone#</div>
                <div class="text-left col-xs-3" id="phone"></div>
                <div class="text-right col-xs-2">Email</div>
                <div class="text-left col-xs-3" id="email"></div>
            </div>
            <div class="row">
                <div class="text-right col-xs-2">Dept:</div>
                <div class="text-left col-xs-3" id="departmentname"></div>
                <div class="text-left col-xs-2">Surname:</div>
                <div class="text-left col-xs-4">
                    <input type="text" placeholder="enter last name" id="TextBoxLastName" class="form-control"/>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="panel-footer">
            <input type="button" value="Find Employee" id="empbutton"/>
            <div class="col-xs-10" id="lblstatus"></div>
        </div>
    </div>
</div>