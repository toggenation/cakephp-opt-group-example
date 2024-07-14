# CakePHP 5 Optgroup Example

Clone this repo

```sh
cd $project_root

composer install

bin/cake server
```

Check src/Controller/OptGroupController.php index method for format of `optGroup` array

Check templates/OptGroup/index.php for Form control

Output 
```html
<select name="athletes[_ids][]" multiple="multiple" id="athletes-id">
    <option value="">(please select)</option>
    <optgroup label="Category1" value="Category1" data-id="id-1">
        <option value="1" data-id="id-1-1">AthleteGroupA</option>
    </optgroup>
    <optgroup label="Category2" value="Category2" data-id="id-2">
        <option value="2" data-id="id-2-2">AthleteGroupB</option>
    </optgroup>
</select>
```
