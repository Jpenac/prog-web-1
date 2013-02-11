# Control de Gastos de Cuentas en un Despacho

Un despacho desea llevar el control de los gastos atribuidos a una "cuenta" para poder realizar los cobros pertinentes a sus clientes.

## Los clientes y las cuentas
El despacho cuenta con clientes y cada cliente puede tener distintas "cuentas" las cuales se entienden como casos que se atienden.

Un cliente puede ser una persona fisica o una persona moral, y lo que les diferencia son los datos personales, ya que de una persona fisica se obtiene el nombre y sus apellidos, y de una persona moral se obtiene el nombre de la empresa.
De todos los clientes se obtiene el RFC, el domicilio (calle, no ext, no int, entre que calles, referencias extras, estado, municipio, colonia y cp), además de uno o varios teléfonos, uno o varios correos y una o varias cuentas bancarias.
Los únicos datos obligatorios de un cliente son los datos personales y el RFC, lo demás puede ser obtenido durante la vida del sistema.

Un cliente puede tener una o varias cuentas.
De las cuentas se sabe la fecha del contrato, el asunto o asuntos que se llevarán a cabo, el período fiscal al que pertenece, un presupuesto y en caso de que la cuenta se pague en plazos, se indica la canitdad de plazos que serán.

Se puede crear una cuenta sin presupuesto siempre y cuando se muestre una alerta indicando que no se recomienda dejar el presupuesto en blanco.

Existen reglas referentes a los asuntos a tratar, tales como, asuntos que representan que los gastos internos del despacho serán cargados a la cuenta, asuntos que deberán ser registrados para dividirse en igualas (pagos mensuales), etc.

Cada cuenta tiene una persona contacto, la cual debe ser registrada con sus datos personales y además de uno o varios telefonos, uno o varios correos y una o varias cuentas bancarias.
Además de la persona de contacto, en el proceso de una cuenta participan terceros a los que se les llamara participaciones institucionales y de los cuales se tienen los mismos datos que de los contactos.

## Cuentas especiales
Las reglas de los asuntos deben ser guardados como ya se mencionó arriba.
Para los casos en que el asunto sea definido como un gasto fijo mensual, se debe crear una cuenta con fecha de renovación segun lo seleccionado por el usuario (cantidad de meses), y entonces se debe generar automaticamente la corrida de pagos que debe realizar el cliente.

## Los gastos y los abonos
Al registrar un gasto se debe conocer a que categoría pertenece el gasto, comentarios al respecto, el costo (lo que pago el despacho por ese gasto), el precio (la cantidad en que será cobrada al cliente) y el modo de pago (efectivo, en especie, cheque, depósito, transferencia).
Para todos los tipos de pago se desea saber quien hizo el pago y quien lo recibió. En caso de cheques, transferencias y depositos se deben poder elegir las cuentas bancarias.

Los abonos son pagos realizados por el cliente, y estos pueden ser abonados a una cuenta, o en caso de ser una cuenta por plazos, deben ser aplicados a una de las igualas, o varias en caso de que la cantidad de dinero lo permita.
La información almacenada referente a los abonos es la misma que en los gastos, a excepción de la categoría. Se pide también poder indicar si este abono representó una factura y que número de factura se utiliza.

## Los reportes

Se desea poder consultar la información de las siguientes maneras:

1. Estado de cuenta del cliente (el real, y el ficticio)
1. Estado de cuenta de igualas
1. Cuentas pendientes por cobrar
1. Cuentas con igualas vencidas
1. Cuentas por cobrar agrupadas por contacto
1. Transacciones de las cuentas bancarias internas

Los reportes deben poder ser descargados a una hoja de calculo, generar un PDF, o desde la aplicación enviados por correo.

Por medio de un calendario se deben mostrar las fechas de vencimiento de igualas, de modo que pueda ser visto fácilmente.

## Los niveles de usuarios

Se deben poder general perfiles de usuarios con los permisos que pueden tener, se recomienda que los perfiles sean generados en base a la configuración seleccionado por el cliente, el cual podrá elegir las tareas que puede o no hacer un perfil.

* Captura de clientes
* Captura de Cuentas bancarias
* Captura de precio modificado
* Captura de Cuentas
* Captura de Gastos
* Captura de Abonos
* Acceso a reportes
Y de la misma manera agregar las reglas para edición y eliminación
