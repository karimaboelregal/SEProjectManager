@extends('layouts.app')
@section('content')
<script>
    var element = document.getElementById("courses");
    element.classList.add("show");
</script>
<div class="content d-flex align-items-center justify-content-center">

                        <div class="card w-50">
                            <div class="card-header" style="background-color:#C63E47;color:White"><strong>Project</strong><small> Form</small></div>
                            <div class="card-body card-block">
                            <!---->
                            <form action="{{route('insertProjTemp')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group"><label for="name" class=" form-control-label">Project template name</label>
                                            <input type="text" id="project_title" name="project_title" placeholder="Enter template name" class="form-control"></div>
                                        <div class="form-group"><label for="description" class=" form-control-label">Description</label>
                                            <input type="text" id="desc" name="description" placeholder="Enter description" class="form-control"></div>
                                        <div class="form-group">
                                        <label for="code" class=" form-control-label">Select course</label>

                                        <ul>
                                        @foreach ($courses as $temp)
                                            <li class="field">
                                                <input class="checbkox" type="checkbox" name={{$temp->Name}} value={{$temp->id}} />
                                                {{$temp->Name}}                                        
                                            </li>
                                        @endforeach                                          
                                    </ul>
                                     </div>
                                    <div class="form-group" id="addAfterThis">
                                    <label for="name" class=" form-control-label">Submission details</label>
                                    <div class="row d-flex justify-content-center" id="submissionBoxes" style="width:100%;margin-top:2%;margin-left:0.2%;padding:20px;max-height:40vh;border:1px solid;border-color:#C63E47;overflow:auto;">
                                    </div>
                                </div>
                                <div class="form-group" style="margin-top:2%;"><button type="button" onclick="addSubm();"class="btn btn-outline">Add a submission</button></div>

                                    </div>
                                <div class="modal-footer">
                                    <div class="form-group">
                                        <button onclick="location.href = '{{route('index')}}'" type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
                                        <button class="btn btn-outline" type="submit" value="submit">submit</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>

                
<script>
function insertAfter(newNode, referenceNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}
function removeItemOnce(arr, value) {
  var index = arr.indexOf(value);
  if (index > -1) {
    arr.splice(index, 1);
  }
  return arr;
}
var ids = 1;
var sel = [];
var inp2 = document.createElement('input');
inp2.type = 'text';
inp2.style.display = 'none';
inp2.name = "vals";
document.getElementById("submissionBoxes").append(inp2);
function addSubm() {
    var newSub = document.createElement('div');
    newSub.classList.add("form-group");
    newSub.style.width = "80%";
    newSub.id = "sub"+ids;
    sel.push("sub"+ids);    
    var label = document.createTextNode('Submission #'+ids);
    var box = document.getElementById("submissionBoxes");
    var inp = document.createElement('input');
    var br = lineBreak = document.createElement('br');
    inp.type = 'text';
    inp.style.width = '60%';
    inp.style.display = 'inline';
    inp.placeholder = 'Enter submission name';
    inp.classList.add('form-control');
    inp.id = "sub"+ids;
    inp.name = "sub"+ids;

    inp2.id = "sub"+ids;
    inp2.value = sel.join();


    var button = document.createElement("button");
    button.type = "button";
    button.style.marginTop = "-3px";
    button.classList.add('btn');
    button.classList.add('btn-outline');
    button.innerHTML = "remove";
    button.onclick= function () { 
        removeItemOnce(sel,newSub.id);
        newSub.remove();
        
    };
    // <button style="margin-top:-3px;" type="button" class="btn btn-outline">remove</button>
    newSub.append(label);
    newSub.append(br);
    newSub.append(inp);
    newSub.append(document.createTextNode (" "));
    newSub.append(button);
    box.append(newSub);
    ids++;
}
</script>

        </div><!-- .animated -->
    </div><!-- .content -->

@endsection

