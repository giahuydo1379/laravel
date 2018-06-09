
<div class="form-group" style="background:#e1e1e1">
    <table class="table table-striped">
    @foreach ($listoption as $option)
    <div class="form-group">
	<label for="updated_at">{{ $option['optiongroup_name'] }}</label>
		<select class="form-control"  name="option['<?=$option['optiongroup_id'] ?>']"   >        
                     @foreach($option['options'] as $sub)
                            <option  value="{{$sub['option_id']}}">{{$sub['option_name']}}</option>
                  @endforeach
		</select>
                   
	</div>
      @endforeach
</table>
    
</div>
