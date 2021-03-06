<?php


class ResolverCheckListForm extends BaseCheckListForm
{
    public function configure()
    {

        // llamamos nuestro método que  incrusta los sub formularios
        $this->embedStandardForm();
        
        // solo dejamos el nombre del sub formulario como campo habilitado
        $this->useFields(['standardList']);

     }

    /**
     * Este metodo  lo usaremos para embeber varios formularios de tipo checked_standard en el formulario principal
     */

    private function embedStandardForm()
    {
        // creamos un formulario vacio que servira como contenedor
        $standardForm  = new sfForm();

        // Obtenemos todos los criterios relacionados a la lista de chequeo
        $checkedStandardList  = $this->getObject()->getCheckedStandards();

        $index = 0;
        // iteramos por cada criterio
        foreach ($checkedStandardList  as $checkedStandard) {
            // creamos una instancia de un formulario de tipo checked_standard por cada iteracion del foreach
            // le pasamos como parametro el objecto de checked_standard para inicializar el formulario con los datos que tiene en base de datos
            $checkedStandardForm = new CheckedStandardForm($checkedStandard);

            // Incrustamos el formulario del criterio en el formulario que nos servira como contenedor
            $standardForm->embedForm($index, $checkedStandardForm);
            $index++;
        }
        // por ultimo incrustamos la lista de formulario en nuestro formulario principal con el nombre standardList
        $this->embedForm('standardList', $standardForm);
    }

    
}
