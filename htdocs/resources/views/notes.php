<!-- View stored in resources/views/greeting.php -->

<html>
    <body>
        <h1>Hello World</h1>
	<table class="pure-table pure-table-bordered">
    		<thead>
        		<tr>
            		<th>#</th>
            		<th>Note</th>
        		</tr>
    		</thead>
    		<tbody>
    		<?php foreach ($notes as $note): ?>
        		<tr>
            		<td><?= $note->id ?></td>
            		<td><?= $note->content ?></td>
        		</tr>
    		<?php endforeach ?>
    		</tbody>
	</table>
    </body>
</html>
