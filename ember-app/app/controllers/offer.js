import Ember from 'ember';

export default Ember.Controller.extend({

  store: Ember.inject.service(),

  actions: {
    buy(offer) {

      let purchase = this.get('store').createRecord('purchase', {
        customerName: this.get('customerName'),
        offeringID: offer.id,
        quantity: this.get('purchaseCount')
      });
      purchase.save().then(() => {
        this.transitionToRoute('index');
      });
    }
  }

});
