<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Another Step Asset Inventory</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <h1>Asset Inventory</h1>
    <form>
        <div class="border-all padding-t0">
            <h3>Asset Information</h3>
            <div class="padding-t0">
                <label name="item_label" for="item">Item Name:</label>
                <input name="item" type="text">                
            </div>
            <div class="display-flex">
                <div class="display-block width-half border-all padding-t0 margin-lr">
                    <h4>General Info</h4>
                    <div class="padding-t0">
                        <label name="device_name_label" for="device_name">Device Name:</label>
                        <input name="device_name" type="text">                    
                    </div>

                    <div class="padding-t0">
                        <label name="category_label" for="category">Category:</label>
                        <select name="category">
                            <option value="option_1">Option 1</option>
                        </select>       
                    </div>

                    <div class="padding-t0">
                        <label name="manufacturer_label" for="manufacturer">Manufacturer:</label>
                        <select name="manufacturer">
                            <option value="option_1">Option 1</option>
                        </select>       
                    </div>

                    <div class="padding-t0">
                        <label name="model_label" for="model">Model:</label>
                        <input name="model" type="text">                    
                    </div>

                    <div class="padding-t0">
                        <label name="serial_label" for="serial">Serial Number:</label>
                        <input name="serial" type="text">                    
                    </div>

                    <div class="padding-t0">
                        <label name="desc_label" for="desc">Description:</label>
                        <textarea class="width-full" name="desc" type="text"></textarea>                    
                    </div>
                </div>
                <div class="width-half margin-lr">
                    <div class="display-block border-all padding-t0">
                        <h4>Aquisition and Financial Info</h4>
                        <div class="padding-t0">
                            <label name="purchase_date_label" for="purchase_date">Purchase Date:</label>
                            <input name="purchase_date" type="date">                    
                        </div>

                        <div class="padding-t0">
                            <label name="purchase_price_label" for="purchase_price">Purchase Price:</label>
                            <input name="purchase_price" type="number">                    
                        </div>

                        <div class="padding-t0">
                            <label name="current_val_label" for="current_val">Current Value:</label>
                            <input name="current_val" type="number">                    
                        </div>

                        <div class="padding-t0">
                            <label name="cost_center_label" for="cost_center">Cost Center:</label>
                            <select name="cost_center">
                            <option value="option_1">Option 1</option>
                            </select>       
                        </div>
                    </div>
                    
                    <div class="display-block border-all padding-t0 margin-t1">
                        <h4>Asset Status Info</h4>

                        <div class="padding-t0">
                            <label name="status_label" for="status">Status:</label>
                            <select name="status">
                                <option value="option_1">Option 1</option>
                            </select>       
                        </div>

                        <div class="padding-t0">
                            <label name="condition_label" for="condition">Condition:</label>
                            <select name="condition">
                                <option value="option_1">Option 1</option>
                            </select>       
                        </div>

                        <div class="padding-t0">
                            <label name="retired_date_label" for="retired_date">Retired Date:</label>
                            <input name="retired_date" type="date">                    
                        </div>
                    </div>

                    <div class="display-block border-all padding-t0 margin-t1">
                        <h4>Asset Assignment Info</h4>

                        <div class="padding-t0">
                            <label name="assigned_to_label" for="assigned_to">Assigned To:</label>
                            <select name="assigned_to">
                                <option value="option_1">Option 1</option>
                            </select>       
                        </div>

                        <div class="padding-t0">
                            <label name="location_label" for="location">Location:</label>
                            <select name="location">
                                <option value="option_1">Option 1</option>
                            </select>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>