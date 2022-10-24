// Identifica os campos de input para aplicação do efeito de float.
const floatLabel = (() => {
	// Acionado quando o usuário clica no input
	const handleFocus = (e) => {
		const target = e.target;
		target.parentNode.classList.add('active');
	};

	// Acionado quando o usuário sai do input
	const handleBlur = (e) => {
		const target = e.target;
		if (!target.value)
			target.parentNode.classList.remove('active');
	};

	//  Aciona os eventos de 'focus' e 'blur'
	const bindEvents = (element) => {
		const floatField = element.querySelector('input');
		floatField.addEventListener('focus', handleFocus);
		floatField.addEventListener('blur', handleBlur);
	};

	// Coleta os inputs
	const init = () => {
		const floatContainers = document.querySelectorAll('.search-form-container');
		// Para cada elemento um addEventListener será acionado
		floatContainers.forEach((element) => {
			// Existe algum valor dentro do input
			if (element.querySelector('input').value)
				element.classList.add('active');

			bindEvents(element);
		});
	};

	return {
		init: init
	};
}) ();

floatLabel.init();