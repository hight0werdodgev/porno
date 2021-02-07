var app = new Vue({
	el: '#app',
	data: {
		balon: false,
		typeBalon: false,
		refueling: 0,
		selectedGaz: 'propan',
			addOptionsPropan: [
				{id: 'i1', name: 'Пакет документов для оформления ГБО в ГИБДД', price: 4000},
				{id: 'i2', name: 'Кронштейн крепления для баллона', price: 500},
				{id: 'i3', name: 'Кронштейн крепления для баллона Газель', price: 2000},
				{id: 'i4', name: 'Снятие/установка впускного коллектора ВАЗ/ГАЗ/УАЗ', price: 800},
				{id: 'i5', name: 'Снятие/установка впускного коллектора 6цил/8цил', price: 1500},
				{id: 'i6', name: 'Оппозитный двигатель', price: 3000},
				{id: 'i7', name: 'Мультиклапан класса ЕВРО', price: 1700}
			],
			addOptionsMetan: [
				{id: 'i8', name: 'Пакет документов для оформления ГБО в ГИБДД', price: 4000},
				{id: 'i9', name: 'Снятие/установка впускного коллектора ВАЗ/ГАЗ/УАЗ', price: 800},
				{id: 'i10', name: 'Снятие/установка впускного коллектора 6цил/8цил', price: 1500},
				{id: 'i11', name: 'Вентиль класса ЕВРО', price: 2500},
			],
			propan: true,
			metan: false,
			saver: 0,
			dream: 0,
			alpha: 0,
			digitronic: 0,
			poletron: 0,
			selectedPower: [],
			selectedAddOptions: [],
			checked: false,
	},
	methods: {

		test() {

		},
	},
	watch: {
		selectedGaz: function() {
			if(this.selectedGaz == 'metan'){
				this.typeBalon = true;
				this.refueling = 0;
			}
		}
	},
	computed: {		
		saverPrice: function(){
			return  this.balon + this.refueling + this.saver + this.selectedAddOptions.reduce((acc, n) => acc + n, 0);
		},
		dreamPrice: function(){
			return  this.balon + this.refueling + this.dream + this.selectedAddOptions.reduce((acc, n) => acc + n, 0);
		},
		alphaPrice: function(){
			return this.balon + this.refueling + this.alpha + this.selectedAddOptions.reduce((acc, n) => acc + n, 0);
		},
		digitronicPrice: function(){
			return  this.balon + this.refueling + this.digitronic + this.selectedAddOptions.reduce((acc, n) => acc + n, 0);
		},
		poletronPrice: function(){
			return  this.balon + this.refueling + this.poletron + this.selectedAddOptions.reduce((acc, n) => acc + n, 0);
		}
	}
});
