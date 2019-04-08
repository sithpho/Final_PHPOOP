<h1>WEP CALCULATOR</h1>
<div class="container mt-4">
    
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <form action="" method="">
                        <div class="form-group">
                            <label>First Number</label>
                            <input type="text" class="form-control" name="firstnumber" require>
                        </div>
                        <div class="form-group">
                            <label for="operator">Select Operator:</label>
                            <select class="form-control" id="operator">
                                <option name='none'>None</option>
                                <option name='add'>Add</option>
                                <option name='minus'>Minus</option>
                                <option name='multi'>Multiply</option>
                                <option name='divide'>Divide</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Second Number</label>
                            <input type="text" class="form-control" name="secondnumber" require>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success">Calculate</button>
                        <p class="mt-4 text-white">The Result is : 0</p>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>