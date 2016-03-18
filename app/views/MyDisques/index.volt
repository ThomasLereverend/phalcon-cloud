//TODO 4.2 Mes disques
<div>
</br>
<h1>Mes disques ->{{session.get('activeUser').getLogin()}} ({{session.get('activeUser').getPrenom()}} -> {{session.get('activeUser').getNom()}})</h1>
{{q["pb"]}}
{{script_foot}}
</br>
<div><h3>Datas</h3>
    <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="47.62" aria-valuemin="0" aria-valuemax="100" style="width:47.62%">
        47.62% Complete (success)
         </div>
    </div>
    <input type="button" class="btn btn-default" value="ouvrir">
</div>
<div><h3>System</h3>
<div class="progress">
      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80.72" aria-valuemin="0" aria-valuemax="100" style="width:80.72%">
        80.72% Complete (warning)
      </div>
</div>
<input type="button" class="btn btn-default" value="ouvrir">
</div>
<div><h3>Archives</h3>
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0"
  aria-valuemin="0" aria-valuemax="100" style="width:1%">
    0.% Complete (success)
  </div>
</div>
<input type="button" class="btn btn-default" value="ouvrir">
</div>
</div>
