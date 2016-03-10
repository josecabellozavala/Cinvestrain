
familia(miembro([tomas],apellido(garcia,perez),cumple('7demayode1960'),trabajo(profesor,60)),miembro([ana],apellido(lopez,ruiz),cumple('10demarzode1962'),trabajo(medica,90)),[miembro([juan],apellido(garcia,lopez),cumple('5deenero1980'),estudiante),miembro([maria],apellido(garcia,lopez),cumple('12deabril1992'),estudiante)]).


familia(miembro([jose],apellido(perez,ruiz),cumple('6demarzode1963'),trabajo(pintor,120)),miembro([luisa],apellido(galvez,perez),cumple('12demayode1964'),trabajo(medica,90)),[miembro([juanluis],apellido(perez,perez),cumple('5defebrero1990'),estudiante),miembro([mariajose],apellido(perez,perez),cumple('12dejunio1992'),estudiante),miembro([josemaria],apellido(perez,perez),cumple('12dejulio1994'),estudiante)]).

%familia(_,_,_,[]). %consulta1: no hijos


ingreso(miembro(_,_,_,trabajo(_,X)),X).
ingreso(miembro(_,_,_,estudiante,0)).


totalingreso([_],0).
tatalingreso([Z|A],S):-ingreso(Z,S1),totalingreso(A,S2),S is S1+S2. %consulta2:Ingresos


nombres(X,Y):-familia(miembro(X,Y,_,_),miembro(X,Y,_,_),[miembro(X,Y,_,_),miembro(X,Y,_,_),miembro(X,Y,_,_)]).       %consulta3: Nombres y apellidos

regla5(X):-familia(_,miembro(X,_,_),_).%consulta 5: mujer y esta casada
