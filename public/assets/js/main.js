function openGuideSidebar(content) {
    document.getElementById('guide-body').innerHTML = content;

    const sidebar = document.querySelector('.guide-sidebar');
    sidebar.classList.add('open');
}

function closeGuideSidebar() {
    const sidebar = document.querySelector('.guide-sidebar');
    sidebar.classList.remove('open');
}

function extendElementclickoutside() {
    (function () {
        if (!Element.prototype.__customEventsExtended) {
            // Mark the prototype to prevent multiple executions.
            Element.prototype.__customEventsExtended = true;

            // Retrieve original methods dynamically from the Element's prototype in the prototype chain.
            const originalAddEventListener = Element.prototype.addEventListener;
            const originalRemoveEventListener = Element.prototype.removeEventListener;

            Element.prototype.addEventListener = function (type, listener, options) {
                if (type === "clickOutside") {
                    const outsideClickListener = (event) => {
                        if (!this.contains(event.target) && this.isConnected) {
                            event.type = "clickOutside";
                            listener.call(this, event);
                        }
                    };

                    // Adding the listener to the document to capture all click events
                    document.addEventListener("click", outsideClickListener, options);

                    // Store in a map to properly remove later
                    this._outsideEventListeners =
                        this._outsideEventListeners || new Map();
                    this._outsideEventListeners.set(listener, outsideClickListener);
                } else {
                    // Call the original addEventListener for other types of events
                    originalAddEventListener.call(this, type, listener, options);
                }
            };

            Element.prototype.removeEventListener = function (
                type,
                listener,
                options
            ) {
                if (type === "clickOutside") {
                    const registeredListener =
                        this._outsideEventListeners &&
                        this._outsideEventListeners.get(listener);
                    if (registeredListener) {
                        document.removeEventListener("click", registeredListener, options);
                        this._outsideEventListeners.delete(listener);
                        if (this._outsideEventListeners.size === 0) {
                            delete this._outsideEventListeners;
                        }
                    }
                } else {
                    // Call the original removeEventListener for other types of events
                    originalRemoveEventListener.call(this, type, listener, options);
                }
            };
        }
    })();
}
extendElementclickoutside();

const myElement = document.getElementById('guide-sidebar');

function handleOutsideClick(event) {
    console.log('Clicked outside the element!');
}

myElement.addEventListener('clickOutside', handleOutsideClick);
