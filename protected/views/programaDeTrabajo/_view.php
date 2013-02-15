	<tr>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->ejercicioFiscal->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->reviso_nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->reviso_puesto); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->autorizo_nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->autorizo_puesto); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->editable); ?>
		</td>
		<?php /*
		<td>
			<?php echo CHtml::encode($data->estatus->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->institucion->nombre); ?>
		</td>
		*/ ?>
	</tr>
	
	
