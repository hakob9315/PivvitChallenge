import DS from 'ember-data';

export default DS.Model.extend({

  customerName: DS.attr('string'),
  offeringID: DS.attr('number'),
  quantity: DS.attr('number')

});
