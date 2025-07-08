import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks } from '@wordpress/block-editor';

// Register the ACF block and define separate InnerBlocks
registerBlockType('acf/container-block', {
    edit: (props) => {
        const leftTemplate = [['core/paragraph', { placeholder: 'Add left content...' }]];
        const rightTemplate = [['core/heading', { placeholder: 'Add right content...' }]];

        return (
            <div className="container-block row">
                <div className="block-inner__left col-sm-12 col-md-6">
                    <InnerBlocks 
                        allowedBlocks={['core/paragraph', 'core/image']} 
                        template={leftTemplate} 
                        templateLock={false} 
                    />
                </div>
                <div className="block-inner__right col-sm-12 col-md-6">
                    <InnerBlocks 
                        allowedBlocks={['core/heading', 'core/list']} 
                        template={rightTemplate} 
                        templateLock={false} 
                    />
                </div>
            </div>
        );
    },
    save: () => {
        return (
            <div className="container-block row">
                <div className="block-inner__left col-sm-12 col-md-6">
                    <InnerBlocks.Content />
                </div>
                <div className="block-inner__right col-sm-12 col-md-6">
                    <InnerBlocks.Content />
                </div>
            </div>
        );
    }
});